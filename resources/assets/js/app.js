import Vue from 'vue'
import VueRouter from 'vue-router'
import KeenUI from 'keen-ui'
import 'keen-ui/dist/keen-ui.css'
import Vuex from 'vuex'
import 'es6-promise/auto'
import axios from 'axios'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter)
Vue.use(KeenUI)
Vue.use(Vuex)

// Chargement des vues
import Dashboard from './views/admin/Dashboard';
import Login from './views/default/Login';
import Home from './views/default/Home';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// Chargement des composants
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('login-component', require('./components/auth/LoginComponent.vue'));
Vue.component('navbar-component', require('./components/NavbarComponent'));

// Les éléments de router and store
const token = localStorage.getItem('user-token')
if (token) {
    axios.defaults.headers.common['Authorization'] = token
}

const store = new Vuex.Store({
    state: {
        token: localStorage.getItem('user-token') || '',
        status: ''
    },

    getters: {
        isAuthenticated: state => {
            return !!state.token
        },
        isNotAuthenticated: state => {
            if(!state.token)
                return true
            else
                return false
        },
        authState: state => state.status
    },

    actions: {
        AUTH_REQUEST ({commit, dispatch}, user) {
            return new Promise((resolve, reject) => { //Une promesse pour la redirection
                commit('AUTH_REQUEST')
                axios({
                    method: 'post',
                    url: 'api/auth/login',
                    data: {
                        login: user.nomUtilisateur,
                        password: user.motDePasse,
                        remember_me: user.seSouvenir
                    }
                }).then( function (response) {
                    const token = response.data.accessToken
                    const tokenType = response.data.tokenType
                    const expiresAt = response.data.expiresAt

                    localStorage.setItem('user-token', token) // Sauvegarde du token
                    localStorage.setItem('token-type', tokenType)
                    localStorage.setItem('expires-at', expiresAt)
                    axios.defaults.headers.common['Authorization'] = token
                    commit('AUTH_SUCCESS', token)
                    dispatch('USER_REQUEST')
                    resolve(response)

                }).catch(error => {
                    commit('AUTH_ERROR', error)
                    localStorage.removeItem('user-token')
                    reject(error)
                })
            })
        },

        AUTH_LOGOUT ({commit, dispatch}) {
            return new Promise((resolve, reject) => {
                commit('AUTH_LOGOUT')
                // On supprime les données de l'utilisateur
                localStorage.removeItem('user-token')
                localStorage.removeItem('token-type')
                localStorage.removeItem('expires-at')
                delete axios.defaults.headers.common['Authorization']
                resolve()
            })
        },

        USER_REQUEST ({commit, dispatch}) {

        }
    },

    mutations: {
        AUTH_REQUEST (state) {
            state.status = 'loading'
        },
        AUTH_SUCCESS (state, token) {
            state.status = 'success'
            state.token = token
        },
        AUTH_ERROR (state) {
            state.status = 'error'
        }
    },
})

const ifNotAuthenticated = (to, from, next) => {
    if (!store.getters.isAuthenticated) {
        next()
        return
    }
    next('login')
}

const ifAuthenticated = (to, from, next) => {
    if (store.getters.isAuthenticated) {
        next()
        return
    }
    next('login')
}


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/home',
            name: 'home',
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
            beforeEnter: ifAuthenticated
        }
    ]
})

const app = new Vue({
    el: '#app',
    components: { Home, Login, Dashboard },
    router,
    store,
});


<template>
    <ui-toolbar
        progress-position="top"
        type="colored"
        text-color="white"
        :raised="true"
        :loading="is_loading">

        <div slot="brand">
            {{ app_name }}
        </div>
        <div slot="actions">

            <ui-button
                color="white"
                has-dropdown
                icon="account_circle"
                ref="dropdownAccount"
                size="large"
                v-if="is_authenticated">
                <ui-menu
                    contains-focus
                    has-icons
                    slot="dropdown"
                    :options="account_options"
                    @close="$refs.dropdownAccount.closeDropdown()">
                </ui-menu>
                {{ nom_utilisateur }}
            </ui-button>

            <ui-button
                color="secondary"
                size="large"
                type="secondary"
                v-if="!is_authenticated"
                v-on:click="se_connecter"
            >
                Se connecter
            </ui-button>
        </div>
    </ui-toolbar>
</template>


<script>

    const account_options = [
        {
            label: 'Se déconnecter'
        }
    ];
    export default {
        name: "NavbarComponent",

        data() {
            return {
                app_name: process.env.MIX_APP_NAME,
                account_options,
            };
        },

        computed: {
            is_authenticated() {
                return this.$store.getters.isAuthenticated
            },
            nom_utilisateur() {
                return this.$store.getters.nomUtilisateur
            },
            is_loading() {
                return this.$store.getters.isLoading
            }
        },

        mounted() {
            console.log('Navbar component mounted.')
        },

        methods: {
            se_connecter: function () {
                this.$router.push({name: 'login'});
            }
        }
    }

</script>

<style scoped>

</style>

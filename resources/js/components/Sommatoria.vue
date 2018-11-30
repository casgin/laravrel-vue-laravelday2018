<template>
    <div>
        <fieldset>
            <legend>Sommatoria</legend>
            <input type="text" v-model="numeroDaSommare" @keyup.enter="aggiungiNumero">
            <button v-on:click="aggiungiNumero">Add</button>

        </fieldset>

        <!-- computed property --->
        <h2>Totale: {{Sommatoria}}</h2>

        <!-- v-for -->
        <ul>
            <li v-for="numero in elencoNumeri">
                {{numero}}
            </li>
        </ul>
    </div>

</template>

<script>
    export default {
        name: "Sommatoria",
        // === metodo che definisce i dati dell'applicativo
        data() {
            return {
                numeroDaSommare: 0,
                elencoNumeri: []
            }
        },

        methods: {
            aggiungiNumero() {
                this.elencoNumeri.push(parseInt(this.numeroDaSommare));
            }
        },

        computed: {
            Sommatoria() {
                let totale=0;

                this.elencoNumeri.forEach(function(numero){
                    totale+=numero;
                });

                return totale;

            }
        }
    }
</script>

<style scoped>

</style>
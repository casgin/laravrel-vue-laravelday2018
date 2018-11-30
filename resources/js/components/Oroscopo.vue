<template>

    <div class="row">
        <div class="col-md-6">
            <!-- === menu segni === -->
            <ul>
                <li v-for="link in elencoSegni" v-bind:key="link.slug">
                    <button @click="dettaglioSegno(link.slug)">{{link.label}}</button>
                </li>
            </ul>

        </div>
        <div class="col-md-6">
            <!-- === Componente dettaglio oroscopo per segno === -->
            <div v-if="dettagloOroscopo !== null">
                <h2>{{dettagloOroscopo.Segno}}</h2>
                <p>{{dettagloOroscopo.Testo}}</p>

            </div>

        </div>
    </div>



</template>

<script>
    export default {
        name: "MenuSegni",

        data() {
            return {
                dettagloOroscopo: null,

                elencoSegni:[
                    {slug:'ariete', label:'Ariete'},
                    {slug:'toro', label:'Toro'},
                    {slug:'gemelli', label:'Gemelli'},
                    {slug:'cancro', label:'Cancro'},
                    {slug:'leone', label:'Leone'},
                    {slug:'vergine', label:'Vergine'},
                    {slug:'bilancia', label:'Bilancia'},
                    {slug:'scorpione', label:'Scorpione'},
                    {slug:'sagittario', label:'Sagittario'},
                    {slug:'capricorno', label:'Capricorno'},
                    {slug:'acquario', label:'Acquario'},
                    {slug:'pesci', label:'Pesci'},
                ]
            }
        },

        methods: {
            dettaglioSegno(segno) {

                console.log(segno);

                // --- Effettuo la chiamata verso il servzio
                axios
                    .get('/api/dettaglio/oroscopo/'.concat(segno))
                    .then( (response) => {

                        console.log(response.data);

                        this.dettagloOroscopo = response.data;

                    });

            }
        }
    }
</script>

<style scoped>

</style>
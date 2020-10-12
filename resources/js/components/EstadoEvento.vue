<template>
<span class="badge"
@click="cambiarEstadoEvento"
:class="cambiarClaseEvento()"
>{{estadoEvento}}</span>
</template>

<script>
export default {
    props: ['estado', 'eventoId'],
    data() {
        return {
            estadoEventoData: null
        }
    },
    mounted() {
        this.estadoEventoData= Number(this.estado)
    },
    methods: {
    cambiarEstadoEvento(){
        if(this.estadoEventoData===1){
            this.estadoEventoData=2
        }else{
            this.estadoEventoData=1
        }
        const params = {
            estado: this.estadoEventoData
        }
        axios.post(`/administrador/eventos/${this.eventoId}`, params)
        .then(respuesta => {conole.log(respuesta)})
        .catch(error => {console.log(error)})
    },
    cambiarClaseEvento(){
            return this.estadoEventoData=== 1 ? 'badge-success' : 'badge-danger';

    }
    },
    computed: {
        estadoEvento(){
            return this.estadoEventoData=== 1 ? 'publicado' : 'sin publicar';
        }
    },
}
</script>

<style>
</style>

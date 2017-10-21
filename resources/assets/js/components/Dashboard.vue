<template>
<div class="dashboard row">
    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading">Total Revenue</div>
            <div class="panel-body"><h2>{{revenue}}$</h2></div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading">Total Hashrate</div>
            <div class="panel-body"><h2>{{revenue}}$</h2></div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading">Total Paid</div>
            <div class="panel-body"><h2>{{paid}}$</h2></div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading">Nr of Authors</div>
            <div class="panel-body"><h2>{{nr}}$</h2></div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading">Paid Authors</div>
            <div class="panel-body"><h2>{{authorsPaid}}$</h2></div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading">Total Readers</div>
            <div class="panel-body"><h2>{{readers}}</h2></div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
export default {
    mounted() {
        console.log('Dashboard Component mounted.')
    },
    data: function() {
        return {
            revenue: 2032,
            hashrate: "45",
            paid: 500,
            nr:50,
            authorsPaid:1250,
            readers: 14500
        }
    },
    computed: {

    },
    methods: {

    }
}
</script>
<style scoped>

</style>

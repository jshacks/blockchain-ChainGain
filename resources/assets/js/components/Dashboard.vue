<template>
<div class="dashboard">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Total Revenue</div>
                <div class="panel-body">
                    <h2>{{revenue}}$</h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Total Hashrate</div>
                <div class="panel-body">
                    <h2>{{revenue}}$</h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Total Paid</div>
                <div class="panel-body">
                    <h2>{{paid}}$</h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nr of Authors</div>
                <div class="panel-body">
                    <h2>{{nr}}$</h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Paid Authors</div>
                <div class="panel-body">
                    <h2>{{authorsPaid}}$</h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Total Readers</div>
                <div class="panel-body">
                    <h2>{{readers}}</h2></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <chart name="Sites Revenue" :labels="labels1" color="#f97978" :data="data1"></chart>
        </div>
        <div class="col-md-4">
            <chart name="Authors Revenue" :labels="labels2" color="#7886f9" :data="data2"></chart>
        </div>
        <div class="col-md-4">
            <chart name="Sites Readers" :labels="labels3" color="#eff978" :data="data3"></chart>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
import {
    Bar
} from 'vue-chartjs'
export default {
    mounted() {
        console.log('Dashboard Component mounted.')
    },
    data: function() {
        return {
            revenue: 2032,
            hashrate: "45",
            paid: 500,
            nr: 50,
            authorsPaid: 1250,
            readers: 14500,
            labels3:["xxx.com","yyy.net","pornhub.ro","adrianthedev.ro"],
            labels1:["xxx.com","yyy.net","pornhub.ro","adrianthedev.ro"],
            labels2:["Ion","Dan","Stefan","Adrian","Gigi","Vali"],
            data3:[45,55,77,34],
            data1:[32,13,99,123],
            data2:[123,232,123,55,56,3],

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

<template>
<div class="dashboard">
    <div class="row tile_count">
        <div class="col-md-4">
            <div class="col-md-12 col-sm-4 col-xs-6 tile_stats_count">
            </div>
            <div class="col-md-10 col-md-offset-2 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-money"></i> Total revenue</span>
                  <div class="count">{{revenue}} $</div>
                  <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-10 col-md-offset-2 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-line-chart"></i> Total Hashrate</span>
                  <div class="count">{{hashrate}}</div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
        </div>
        <div class="col-md-4">
            <pie name="Sites Revenue" :labels="labels1" :colors="colors" :data="data1"></pie>
        </div>
        <div class="col-md-4">
                    <div class="col-md-2  col-sm-4 col-xs-6 tile_stats_count">
                    </div>
                    <div class="col-md-10 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-user"></i> Nr of Authors</span>
                          <div class="count">{{nr}}</div>
                          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>23% </i> From last Week</span>
                    </div>
                    <div class="col-md-10 col-md-offset-2 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-user"></i> Paid Authors</span>
                          <div class="count">{{authorsPaid}} $</div>
                          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>11% </i> From last Week</span>
                    </div>
                    <div class="col-md-10 col-md-offset-2 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-user"></i> Total Readers</span>
                          <div class="count">{{readers}}</div>
                          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>17% </i> From last Week</span>
                    </div>
        </div>

    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <chart name="Authors Revenue" :labels="labels2" color="#7886f9" :data="data2"></chart>
        </div>
        <div class="col-md-5">
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
        console.log('Dashboard Component mounted.');
        axios.get('/dashboard/data').then(response => {
            let data = response.data;
            this.revenue = data.revenue;
            this.revenue = this.revenue.toString().substring(0, 6);
        })
    },
    data: function() {
        return {
            revenue: "",
            hashrate: "213 H/s",
            nr: 55,
            authorsPaid: 1253,
            readers: 14566,
            labels1:["medium.com", "wikipedia.com", "news.ycombinator.com","producthunt.com"],
            labels3:["medium.com", "wikipedia.com", "news.ycombinator.com","producthunt.com"],
            labels2:["Jeff Bridges", "Travis Kalanick", "Kendrick Lamar", "Elo Musk", "Lil Dicky", "Steve Jobs"],
            data3:[45,55,77,34],
            data1:[132,123,79,123],
            data2:[123,232,123,155,356,199],
            colors:["#f97978","#7886f9", "#eff978"]
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

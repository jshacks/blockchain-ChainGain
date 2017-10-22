<template>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Currency</th>
                <th>Earnings</th>
                <th>Nr. of authors</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="site in sites">
                <td>{{ site.id }}</td>
                <td><a :href="'/sites/' + site.id" class="">{{ site.name }}</a></td>
                <td><span v-if="site.currency==0">Monero</span><span v-if="site.currency==1">Dash</span><span v-if="site.currency==2">Etherum</span><span v-if="site.currency==3">ChainGain</span></td>
                <td>{{ site.earnings }}</td>
                <td>{{ site.authors.length }}</td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    props: {
        sites: {},
    }
}
</script>

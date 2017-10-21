<template>
    <div>
        <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Currency</th>
                      <th>Earnings</th>
                      <th>Nr. of authors</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="site in sites">
                      <td>{{ site.id }}</td>
                      <td>{{ site.name }}</td>
                      <td><span v-if="site.currency==0" >Monero</span><span v-if="site.currency==1">Dash</span><span v-if="site.currency==2">Etherum</span></td>
                      <td>{{ site.earnings }}</td>
                      <td>{{ site.authors.length }}</td>
                      <td><a :href="'/sites/' + site.id" class="btn btn-xs btn-primary btn-block">Edit</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:{
          sites: {},
        }
    }
</script>

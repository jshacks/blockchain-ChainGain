<template>
    <div>
        <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Adress</th>
                      <th>Percentage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="author in authors">
                      <td>{{ author.id }}</td>
                      <td>{{ author.name }}</td>
                      <td>{{ author.adress }}</td>
                      <td>{{ author.percentage }}</td>
                      <td><button class="btn btn-xs btn-primary btn-block">Edit</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log('author list:Component mounted.')
        },
        props:{
          authors: {},
        }
    }
</script>

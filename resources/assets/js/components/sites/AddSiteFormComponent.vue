<template>
<form @submit.prevent="saveProduct">
    <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Name" v-model="model.name"  name="name"/>
            </div>
            <div class="form-group">
                <label>Currency</label>
                <input type="text" placeholder="Currency" v-model="model.currency"  name="currency"/>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group new-button">
            <button class="button">
              <i class="fa fa-pencil"></i>
              <span>Add Site</span>
            </button>
            </div>
        </div>
    </div>
</form>
</template>

<script>
export default {
    props: ['model', 'isEditing'],
    created() {},
    methods: {
        saveProduct() {
             this.$emit('save-product', this.model)
        }
    }
}
</script>

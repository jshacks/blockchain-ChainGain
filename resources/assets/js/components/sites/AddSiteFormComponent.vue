<template>
<form @submit.prevent="saveProduct">
    <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" v-model="model.name"  name="name" id="inputSuccess2" placeholder="Name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true" style="margin-top:0px;"></span>
            </div>
            <div v-if="type=='site'" class="form-group currencies-toggle">
                <h4>Currency</h4>
                <div class="radio">
                  <label>
                    <img src="/img/currencies/monero.jpg" alt="">
                      Monero
                      <input type="radio" v-model="model.currency" v-bind:value="0" name="currency">
                      </label>
                </div>
                <div class="radio">
                  <label>
                    <img src="/img/currencies/dash.jpg" alt="">
                      Dash
                      <input type="radio" v-model="model.currency" v-bind:value="1" name="currency">
                      </label>
                </div>
                <div class="radio">
                  <label>
                    <img src="/img/currencies/ethereum.jpg" alt="">
                      Etherum
                      <input type="radio" v-model="model.currency" v-bind:value="2" name="currency">
                      </label>
                </div>
                <div class="radio">
                  <label>
                    <img src="/img/currencies/chain-gain.jpg" alt="">
                      ChainGain
                      <input type="radio" v-model="model.currency" v-bind:value="3" name="currency">
                      </label>
                </div>
            </div>
            <div v-if="type=='author'" class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" v-model="model.address"  name="name" id="inputSuccess2" placeholder="Address">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true" style="margin-top:0px;"></span>
            </div>

            <div v-if="type=='author'" class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" v-model="model.percentage"  name="name" id="inputSuccess2" placeholder="Percentage">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true" style="margin-top:0px;"></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group new-button">
            <button class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i>
              <span>Add Site</span>
            </button>
            </div>
        </div>
    </div>
</form>
</template>

<script>
export default {
    props: ['model', 'type', 'isEditing'],
    created() {},
    methods: {
        saveProduct() {
             this.$emit('save-product', this.model)
        }
    }
}
</script>

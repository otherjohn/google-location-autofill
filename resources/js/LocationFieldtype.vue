<template>
  <div>
      <vue-google-autocomplete

              ref="address"
              :value="inputValue"
              types=""
              classname="input-text"
              placeholder="Start typing"
              v-on:placechanged="getAddressData"
              :country="us"
      >
      </vue-google-autocomplete>

  </div>
</template>

<script>
    import VueGoogleAutocomplete from './VueGoogleAutocomplete.vue';

export default {
  name:'AutoComplete',
  components: { VueGoogleAutocomplete },
  mixins: [Fieldtype],
    data: function () {
        return {
            address: ''
        }
    },

    computed: {
        inputValue() {

            return this.value && this.value.formatted_address
                ? this.value.formatted_address
                : "";
        },

        replicatorPreview() {
            return this.value && this.value.formatted_address
                ? this.value.formatted_address
                : "";
        }
    },

    mounted() {
        // To demonstrate functionality of exposed component functions
        // Here we make focus on the user input
        this.$refs.address.focus();
    },

    methods: {
        /**
         * When the location found
         * @param {Object} addressData Data of the found location
         * @param {Object} placeResultData PlaceResult object
         * @param {String} id Input container ID
         */
        getAddressData: function (addressData, placeResultData, id) {
            this.update(addressData);
        }
    }

};
</script>

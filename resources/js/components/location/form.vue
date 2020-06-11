<template>
  <form @submit.prevent="submit" method="post" action="/wilayah">

    <div v-if="alert.message" :class="['alert alert-' + alert.type]">
      <p>{{ alert.message }}</p>
    </div>

    <div :class="['form-group', { 'has-error' : errors.provinsi }]">
      <label class="control-label">Provinsi</label>
      <select @change="provinsi" v-model="state.provinsi" class="form-control">
        <option value="">Pilih Provinsi</option>
        <option v-for="provinsi in provinsi" :value="provinsi.id">
          {{ provinsi.name }}
        </option>
      </select>
      <span v-if="errors.provinsi" class="label label-danger">
        {{ errors.provinsi[0] }}
      </span>
    </div>

    <div :class="['form-group', { 'has-error' : errors.kabupaten }]">
      <label class="control-label">Kota/kabupaten</label>
      <select @change="kabupaten" v-model="state.kabupaten" class="form-control">
        <option value="">Pilih Kota/Kabupaten</option>
        <option v-for="kabupaten in kabupaten" :value="kabupaten.id">
          {{ kabupaten.name }}
        </option>
      </select>
      <span v-if="errors.kabupaten" class="label label-danger">
        {{ errors.kabupaten[0] }}
      </span>
    </div>

    <div :class="['form-group', { 'has-error' : errors.kecamatan }]">
      <label class="control-label">Kecamatan</label>
      <select v-model="state.kecamatan" class="form-control">
        <option value="">Pilih Kecamatan</option>
        <option v-for="kecamatan in kecamatans" :value="kecamatan.id">
          {{ kecamatan.name }}
        </option>
      </select>
      <span v-if="errors.kecamatan" class="label label-danger">
        {{ errors.kecamatan[0] }}
      </span>
    </div>

    <div class="form-group">
      <button class="btn btn-primary">Kirim</button>
    </div>
  </form>
</template>

<script>
  export default {
    name: 'LocationForm',

    data() {
      return {
        alert: {},
        errors: [],
        state: {
          provinsi: '',
          kabupaten: '',
          kecamatan: ''
        },
        provinsi: [],
        kabupaten: [],
        kecamatan: []
      }
    },

    mounted() {
      // get all provinsi data
      axios.get('/wilayah/provinsi').then(response => {
        this.provinsi = response.data;
      }).catch(error => console.error(error));
    },

    methods: {
      submit(e) {
        this.errors = [];
        this.alert = {};

        axios.post(e.target.action, this.state).then(response => {
          if (response.data.status) {
            this.alert = {
              type: 'success',
              message: response.data.message
            }

            this.errors = [];
          }
        }).catch(error => {
          if (error) {
            if (error.response.status == 422) {
              this.errors = error.response.data;
            }
          }
        });
      },

      provinsi() {
        this.state.kabupaten = '';

        // set params
        const params = {
          provinsi: this.state.provinsi
        }

        // url /wilayah/kabupaten?provinsi=xxx
        axios.get('/wilayah/kabupaten', {params}).then(response => {
          this.kabupaten = response.data;
        }).catch(error => console.error(error));
      },

      kabupaten() {
        this.state.kecamatan = '';

        // set params
        const params = {
          kabupaten: this.state.kabupaten
        };

        axios.get('/wilayah/kecamatan', {params}).then(response => {
          this.kecamatan = response.data;
        }).catch(error => console.error(error));
      }
    }
  }
</script>
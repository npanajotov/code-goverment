<template>
    <div>
        <div v-if="is_requested" class="alert alert-info">
            <h4 class="alert-heading">Zahtev je i dalje u obradi</h4>
            <p class="mb-0">Uputili ste zahtev za promenu adresu. U najskorijem roku ćete biti obavešteni o
                daljim koracima.</p>
        </div>
        <div v-else>
            <div v-if="isSend" class="alert alert-success" role="alert">
                <h4 class="alert-heading">Uspešno poslat zahtev!</h4>
                <p class="mb-0">Uspešno ste uputili zahtev za promenu adresu. U najskorijem roku ćete biti obavešteni o
                    daljim koracima.</p>
            </div>
            <div v-else>
                <p><strong>Novo prebivalište:</strong></p>
                <div class="form-group row">
                    <label for="Ulica" class="col-sm-2 col-form-label">Ulica:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Ulica" id="Ulica" v-model="street"
                               placeholder="Unesite ulicu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Ulica" class="col-sm-2 col-form-label">Broj:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Broj" id="Broj" v-model="addressNumber"
                               placeholder="Unesite broj">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Opstina" class="col-sm-2 col-form-label">Opstina:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Opstina" id="Opstina" v-model="state"
                               placeholder="Unesite opstinu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Mesto" class="col-sm-2 col-form-label">Mesto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Mesto" id="Mesto" v-model="city"
                               placeholder="Unesite mesto">
                    </div>
                </div>
                <button class="btn btn-primary" @click="send">
                    Uputite zahtev za promenu prebivališta
                </button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['is_requested', 'user_id'],
        data: () => ({
            isSend: false,
            success: false,
            street: '',
            addressNumber: '',
            city: '',
            state: '',

        }),
        methods: {
            send() {
                let data = {
                    user_id: this.user_id,
                    street: this.street,
                    num: this.addressNumber,
                    place: this.state,
                    city: this.city,
                };


                this.axios.post('/api/request-address', data).then(() => {
                    this.success = true;
                    this.isSend = true;
                });
            }
        }
    }
</script>

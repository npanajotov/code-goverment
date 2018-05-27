<template>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="eps" value="" id="eps" @change="send">
            <label class="form-check-label" for="eps">
                Elektrodistribucija
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" v-model="vodovod" id="vod" @change="send">
            <label class="form-check-label" for="vod">
                Vodovod i kanalizacija
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" v-model="telekom" value="" id="tele" @change="send">
            <label class="form-check-label" for="tele">
                Telekom (Fiksni telefon, Televizija, Internet)
            </label>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['selected_telekom', 'selected_eps', 'selected_vodovod', 'user_id'],
        data: () => ({
            eps: false,
            telekom: false,
            vodovod: false
        }),
        created: function () {
            if (this.selected_telekom) this.telekom = true;
            if (this.selected_eps) this.eps = true;
            if (this.selected_vodovod) this.vodovod = true;
        },
        methods: {
            send() {
                let data = {
                    selected_telekom: this.telekom,
                    selected_eps: this.eps,
                    selected_vodovod: this.vodovod,
                    user_id: this.user_id
                };

                this.axios.post('/api/change-notification-service', data).then(() => {

                }).catch(() => {
                    console.log('error');
                });
            }
        }
    }
</script>

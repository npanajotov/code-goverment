<template>
    <div class="pl-3 pb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" v-model="m_phone" id="smsNoty" @change="send">
            <label class="form-check-label" for="smsNoty">
                Putem SMS poruke
                <small><a :href="'tel:' + phone">{{phone}}</a>
                </small>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="2" v-model="m_email" id="emailNoty" @change="send">
            <label class="form-check-label" for="emailNoty">
                Putem Email-a
                <small><a :href="'mailto:' + email">{{email}}</a>
                </small>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="3" v-model="m_ios" id="androidIosNoty"
                   @change="send">
            <label class="form-check-label" for="androidIosNoty">
                Putem Android/iOS aplikacije
                <small><a href="#">(možete je skinuti ovde)</a></small>
            </label>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['email', 'phone', 'user_id', 'selected_ios', 'selected_phone', 'selected_email'],
        data: () => ({
            m_ios: false,
            m_phone: false,
            m_email: false,
        }),
        created: function () {
            if (this.selected_ios) this.m_ios = true;
            if (this.selected_phone) this.m_phone = true;
            if (this.selected_email) this.m_email = true;
        },
        methods: {
            send() {
                let data = {
                    selected_email: this.m_email,
                    selected_phone: this.m_phone,
                    selected_ios: this.m_ios,
                    user_id: this.user_id
                };

                this.axios.post('/api/change-notification', data).then(() => {

                }).catch(() => {
                    console.log('error');
                });
            }
        }


    }
</script>

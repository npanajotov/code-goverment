<template>
    <div>

    </div>
</template>
<script>
    export default {
        created: function () {
            this.get();
        },
        data: () => ({
            news: []
        }),

        methods: {
            get() {
                this.axios.get('/api/news').then(response => {
                    this.news = response.data.news;
                }).catch(() => {
                    console.log('error');
                });
            }
        }
    }
</script>

<template>
    <div class="flex justify-center sm:gap-6 gap-2 sm:mx-0 mx-3 mt-4">
        <a href="#" class="btn btn-green inline-block sm:px-10 px-6 py-2" @click.prevent="confirm(1)">¡Si asistiré!</a>
        <a href="#" class="btn btn-red inline-block sm:px-5 px-2 py-2" @click.prevent="confirm(0)">No podré asistir</a>
    </div>
</template>

<script>
export default {
    name: 'ConfirmAttend',
    props: {
        currentUser: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            attend: 0,
        };
    },
    methods: {
        confirm(data) {
            axios.post('/api/attend', { attend: data, user: this.currentUser.uuid})
                    .then((response) => {
                        console.log(response.data);
                    })
                    .catch((error) => {
                        console.log(error);
                })
        },
    },
};
</script>

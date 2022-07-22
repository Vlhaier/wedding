<template>
    <div class="flex justify-center gap-6 mt-4">
        <a href="#" class="btn btn-green inline-block px-10 py-2" @click.prevent="confirm(1)">Sí asistiré</a>
        <a href="#" class="btn btn-red inline-block px-5 py-2" @click.prevent="confirm(0)">No podré asistir</a>
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

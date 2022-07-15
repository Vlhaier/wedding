<template>
    <div class="password-toggle-wrap">
        <slot></slot>
        <svg
            class="password-toggle"
            @click="toggleType"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            role="img"
            aria-label="Icono para poder ver contraseña"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
        >
            <path stroke-linecap="round" stroke-linejoin="round" :d="svgPath"></path>
        </svg>
    </div>
</template>

<script>
export default {
    name: 'PasswordToggle',
    data() {
        return {
            show: false,
        };
    },
    computed: {
        svgPath() {
            return this.show
                ? 'M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21'
                : 'M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z';
        },
    },
    methods: {
        toggleType() {
            this.show = !this.show;
            this.$slots.default.forEach((vnode) => (vnode.elm.type = this.show ? 'text' : 'password'));
        },
    },
};
</script>

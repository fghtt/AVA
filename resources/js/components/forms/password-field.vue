<template>
    <div class="form-group row">
        <input class="inpt" :type="showPassword ? 'text' : 'password'" :name="name" @input="input">
        <div class="password-eye">
            <i @click="switchInput" class="fa fa-eye"></i>
            <div @click="switchInput" class="strikethrough-line-container">
                <div :class="showPassword ? 'remove-cross-out' : 'cross-out'" class="strikethrough-line"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "password-field",
    props: ['label', 'name'],
    data() {
        return {
            showPassword: false
        }
    },
    methods: {
        switchInput() {
            this.showPassword = !this.showPassword
        },
        input(e) {
            let value = e.target.value
            this.$emit('update:modelValue', value)
        }
    }
}
</script>

<style scoped>

.form-group {
    width: 95%;
    margin: 10px auto 0 auto;
    display: flex;
    flex-direction: column;
}

.inpt {
    margin-top: 5px;
    height: 45px;
    padding-left: 10px;
    border: 0;
    border-radius: 4px;
    background: #e6e7eb;
}

.password-eye {
    height: 30px;
    position: absolute;
    z-index: 1;
    margin: 15px 0 0 280px;
}

.password-eye i {
    font-size: 1.5em;
    color: #6b6b6b;
    cursor: pointer;
    transition: 0.8s all ease;
}

.password-eye i:hover {
    color: black;
}

.strikethrough-line-container {
    width: 30px;
    height: 30px;
    position: relative;
    top: -32px;
    overflow: hidden;
    cursor: pointer;
}

@keyframes cross_out {
    0% {
        top: -30px;
        right: -37px;
    }
    100% {
        top: 5px;
        right: -12px;
    }
}

@keyframes remove_cross_out {
    0% {
        top: 0px;
        right: -12px;
    }
    100% {
        top: -30px;
        right: -37px;
    }
}

.strikethrough-line {
    width: 1.5px;
    height: 25px;
    transform: rotate(40deg);
    position: relative;
    top: 0px;
    right: -12px;
    background: #6b6b6b;
}

.cross-out {
    animation: 0.08s cross_out forwards;
}

.remove-cross-out {
    animation: 0.08s remove_cross_out forwards;
}
</style>

<template>
    <div class="form-group">
        <label :for="`#${name}`">{{ label }}</label>
        <input class="form-group_inpt" :id="name" type="text"
               :name="name" @input="input">
    </div>
</template>

<script>
export default {
    name: "text-field",
    props: ['label', 'name'],
    methods: {
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

.form-group_inpt {
    margin-top: 5px;
    height: 45px;
    padding-left: 10px;
    border: 0;
    border-radius: 4px;
    background: #e6e7eb;
}
</style>

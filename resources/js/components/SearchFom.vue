<template>
    <div class="card bg-transparent-500" id="send-form">
        <div class="p-inputgroup mt-5 bg-transparent-100 p-6 border-round">
            <div class="grid w-full flex align-content-center">
                <div class="col-12 flex align-content-around align-items-center flex-wrap card-container">
                    <InputText type="text" v-model="human"  placeholder="Фамилия Имя"/>
                </div>
                <div class="col-1 col-lg-3"></div>
                <div class="col-5 col-lg-3">
                    <Listbox v-model="selectedSource" :options="sources" optionLabel="name" class="p-invalid w-full md:w-14rem" />
                </div>
                <div class="col-5 col-lg-3 flex align-content-around align-items-center flex-wrap card-container">
                    <Button label="Найти людей" @click="sendForm"/>
                </div>
                <div class="col-1 col-lg-3 "></div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: 'SearchForm',
    data() {
        return {
            selectedProduct: null,
            sources: [
                {
                    name: 'vk.com',
                    value: 'vk'
                },
                {
                    name: 'ok.ru',
                    value: 'ok'
                },
            ],
            selectedSource: {
                name: 'vk.com',
                value: 'vk'
            },
            human: null,
        }
    },
    methods: {
        sendForm() {
            this.errors = [];

            axios.get('/people', {
                params: {
                    type: this.selectedSource.value,
                    query: this.human
                }
            })
            .then((response) => {
                this.$store.state.searchPeople = response.data.data;
                console.log(this.$store.state.searchPeople);
            })
            .catch((error) => {
                this.errors = error.response.data.errors;
            });
        }
    }
}
</script>
<style>
#send-form {
    margin-top: 200px;
}
</style>

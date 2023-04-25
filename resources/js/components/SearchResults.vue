<template>
    <div class="card bg-transparent-500 mt-5">
        <div class="p-inputgroup mt-5 bg-transparent-100 p-6 border-round">
            <div class="grid w-full flex align-content-center">
                <div class="col-12 flex align-content-around align-items-center flex-wrap card-container">
                    <DataTable :value="$store.state.searchPeople" tableStyle="width: 100%;" v-if="$store.state.searchPeople !== null">
                        <Column field="first_name" header="Имя"></Column>
                        <Column field="last_name" header="Фамилия"></Column>
                        <Column field="last_name" header="Профиль">
                            <template #body="slotProps">
                                <a :href="slotProps.data.link">{{ slotProps.data.link }}</a>
                            </template>
                        </Column>
                        <Column header="Фото">
                            <template #body="slotProps">
                                <img :src="slotProps.data.photo" alt="Фото профиля" width="100">
                            </template>
                        </Column>
                    </DataTable>
                    <h4 v-else>Данные аккаунтов</h4>
                </div>
            </div>
        </div>
    </div>
</template>

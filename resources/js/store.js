import { createStore } from 'vuex';

const store = createStore({
    state() {
        return {
            searchPeople: null
        }
    }
});

export default store;

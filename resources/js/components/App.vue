<template>
    <div>
        <SearchFom/>
        <SearchResults/>
    </div>
</template>
<script>
import SearchFom from './SearchFom';
import SearchResults from './SearchResults';

export default {
    components: {
        SearchFom, SearchResults
    },
    name: 'App',
}
</script>

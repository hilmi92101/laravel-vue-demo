<template>
    <div class="container">
        <h1>Name: {{ name }}</h1>
        <h1>Age: {{ age }}</h1>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data: function(){

	    	return {

	    		name: 'Developer',
	    		age: 28,

	    	}
	    }
    }
</script>

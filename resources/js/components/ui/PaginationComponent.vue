<template>
    <div class="container">

    	<h1>{{ title }}</h1>

		<paginate
			:page-count="10"
			:page-range="3"
			:margin-pages="2"
			:click-handler="clickCallback"
			:prev-text="'Prev'"
			:next-text="'Next'"
			:container-class="'pagination'"
			:page-class="'page-item'"
			:prev-link-class="'page-link'"
			:next-link-class="'page-link'"
			:page-link-class="'page-link'"

		>
		</paginate>



		
        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        },

        props: ['title'],

        methods: {
            clickCallback: function(pageNum){
                console.log(pageNum);
                this.dbCall();
            },

            dbCall: function(){
                console.log('Loading data....');
            }
        }
    }
</script>





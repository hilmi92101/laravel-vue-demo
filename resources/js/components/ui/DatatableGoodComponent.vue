<template>
    <div class="container">

        <vue-good-table
			:columns="columns"
			:rows="rows"

			styleClass="vgt-table striped"

			:search-options="{
				enabled: true
			}"

		  :pagination-options="{
			    enabled: true,
				mode: 'records',
				perPage: 10,
				position: 'top',
				perPageDropdown: [10, 25, 50, 100],
				dropdownAllowAll: false,
				setCurrentPage: 1,
				nextLabel: 'next',
				prevLabel: 'prev',
				rowsPerPageLabel: 'Rows per page',
				ofLabel: 'of',
				pageLabel: 'page', // for 'pages' mode
				allLabel: 'All',
			}"
		/>

		<div class="mb-4"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },


        created() { 


        	console.log("Component created!"); 

        	var self = this;


        	axios.get('/demo/axios')
        		.then(function (response) {

				    // handle success
				    console.log(response.data);

				    self.rows = response.data;

			  	})
		  		.catch(function (error) {

				    // handle error
				    //console.log(error);


		  	});


    	},

        data(){
			return {
				columns: [
						{
							label: 'Name',
							field: 'name',
						},
						{
							label: 'Email',
							field: 'email',
						},
						{
							label: 'Created On',
							field: 'created_at',
							type: 'date',
							//dateInputFormat: 'yyyy-MM-dd',
							dateInputFormat: 'yyyy-MM-dd HH:mm:ss',
							//dateOutputFormat: 'MMM Do yy',
							//dateOutputFormat: 'dd MMM Y',
							dateOutputFormat: 'dd MMMM yyyy',
						},
						/*{
							label: 'Percent',
							field: 'score',
							type: 'percentage',
						},*/
				],
				rows: [],

				/*rows: [
					{ id:1, name:"John", age: 20, createdAt: '2011-10-31',score: 0.03343 },
					{ id:2, name:"Jane", age: 24, createdAt: '2011-10-31', score: 0.03343 },
					{ id:3, name:"Susan", age: 16, createdAt: '2011-10-30', score: 0.03343 },
					{ id:4, name:"Chris", age: 55, createdAt: '2011-10-11', score: 0.03343 },
					{ id:5, name:"Dan", age: 40, createdAt: '2011-10-21', score: 0.03343 },
					{ id:6, name:"John", age: 20, createdAt: '2011-10-31', score: 0.03343 },
				],*/
			};
		},
    }
</script>

<script>
	import DatePicker from 'vue2-datepicker';
	import 'vue2-datepicker/index.css';
 
	export default {
		components: { DatePicker },
		data() {
			return {
				time1: null,
				time2: null,
				time3: null,
				startDate: null,
				endDate: null,
			};
		},
		methods: {
	        getStartDate: function(){

	        	if (this.time3 !== null) {

	        		var data = this.time3;

	        		this.startDate = data[0];
	        		this.endDate = data[1];


	        	}
	        	

	        },
		}
	};
</script> 
 
<template>
	<div>

		<div class="row">
			<div class="col-md-12 mb-3">
				<date-picker v-model="time1" valueType="format"></date-picker>
			</div>

			<div class="col-md-12 mb-3">
				<date-picker v-model="time2" type="datetime"></date-picker>
			</div>
				
			<div class="col-md-12 mb-3">
				<date-picker @change="getStartDate" v-model="time3" range></date-picker>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<p>Date 1: {{ time1 }}</p>
			</div>
			<div class="col-md-4">
				<p>Date 2: {{ time2 }}</p>
			</div>
			<div class="col-md-4">
				<p>Date 3: {{ time3 }}</p>
				<p>Start Date: {{ startDate }}</p>
				<p>End Date: {{ endDate }}</p>
			</div>
			
		</div>
		
		
		
	</div>
</template>

<style scoped>
	
	p {

		display: block;

	}
</style>
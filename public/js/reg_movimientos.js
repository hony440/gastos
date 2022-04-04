	const validar=()=>{
		const cat_id=document.querySelector("#cat_id");
		const tip_id=document.querySelector("#tip_id");
		const mov_fecha=document.querySelector("#mov_fecha");
		const mov_tipo=document.querySelector("#mov_tipo");
		const mov_cantidad=document.querySelector("#mov_cantidad");

		if(cat_id.value.length==0){
			Swal.fire({
				icon:'error',
				title:'ERROR',
				text:'Escoga la categoria'
			});
			return false;
		}		if(tip_id.value.length==0){
			Swal.fire({
				icon:'error',
				title:'ERROR',
				text:'Escoga el tipo'
			});
			return false;
		}		if(mov_fecha.value.length==0){
			Swal.fire({
				icon:'error',
				title:'ERROR',
				text:'Ingrese la fecha'
			});
			return false;
		}		if(mov_tipo.value.length==0){
			Swal.fire({
				icon:'error',
				title:'ERROR',
				text:'Seleccione el tipo'
			});
			return false;
		}		if(mov_cantidad.value.length==0){
			Swal.fire({
				icon:'error',
				title:'ERROR',
				text:'Se debe ingresar una cantidad'
			});
			return false;
		}
	}
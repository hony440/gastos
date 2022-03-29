	const validar=()=>{
		const cat_nombre=document.querySelector("#cat_nombre");
		if(cat_nombre.value.length==0){
			Swal.fire({
				icon:'error',
				title:'ERROR',
				text:'El campo nombre es obligatorio'
			});
			return false;
		}
	}
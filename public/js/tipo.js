	const validar=()=>{
		const tip_nombre=document.querySelector("#tip_nombre");
		if(tip_nombre.value.length==0){
			Swal.fire({
				icon:'error',
				title:'ERROR',
				text:'El campo nombre es obligatorio'
			});
			return false;
		}
	}
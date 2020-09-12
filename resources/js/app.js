

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const apiportafolio = new Vue({
    el: '#apiportafolio',
    methods:{
      eliminarimagen(imagen){

            Swal.fire({
                title: '¿Dese eliminar la imagen '+imagen.id+'?',
                text: "¡No podrá revertir los cambios!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, Eliminar!',

                cancelButtonText: 'Cancelar'

              }).then((result) => {
                if (result.value) {

                  let url = '/api/eliminarimagen/'+imagen.id;
                  axios.delete(url).then(response => {
                      console.log(response.data);
                  });


                  var elemento = document.getElementById('idimagen-'+imagen.id);
                  elemento.parentNode.removeChild(elemento);


                  Swal.fire(
                    '¡Eliminado!',
                    'Su archivo ha sido eliminado.',
                    'success'
                  )
                }
              })

        }
    }
});

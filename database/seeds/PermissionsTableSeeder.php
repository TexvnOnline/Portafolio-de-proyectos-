<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         // compañía
      
        Permission::create([
            'name'=>'Edicion de compañía',
            'slug'=>'companies.edit',
            'description'=>'Editar cualquier dato de compañía del sistema',
        ]);
        //contacts
        Permission::create([
            'name'=>'Edicion de contactos',
            'slug'=>'contacts.edit',
            'description'=>'Editar cualquier dato de contactos del sistema',
        ]);
        //sliders
        Permission::create([
            'name'=>'Edicion de carrusel',
            'slug'=>'sliders.edit',
            'description'=>'Editar cualquier dato de carrusel del sistema',
        ]);
        // socials
        Permission::create([
            'name'=>'Creación de redes sociales',
            'slug'=>'socials.create',
            'description'=>'Podría crear nuevos redes sociales en el sistema',
        ]);
        Permission::create([
            'name'=>'Edicion de redes sociales',
            'slug'=>'socials.edit',
            'description'=>'Editar cualquier dato de redes sociales del sistema',
        ]);

        Permission::create([
            'name'=>'eliminar redes sociales',
            'slug'=>'socials.destroy',
            'description'=>'Eliminar cualquier dato de redes sociales del sistema',
        ]);

        ///////////////////////////////////////////////////////
        // USUARIOS
        Permission::create([
            'name'=>'Navegar usuarios',
            'slug'=>'users.index',
            'description'=>'lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'=>'Ver detalle de usuarios',
            'slug'=>'users.show',
            'description'=>'ver en detalle cada usuarios del sistema',
        ]);
        
        Permission::create([
            'name'=>'Creación de usuarios',
            'slug'=>'users.create',
            'description'=>'Podría crear nuevos usuarios en el sistema',
        ]);
        Permission::create([
            'name'=>'Edicion de usuarios',
            'slug'=>'users.edit',
            'description'=>'Editar cualquier dato de usuarios del sistema',
        ]);

        Permission::create([
            'name'=>'eliminar usuarios',
            'slug'=>'users.destroy',
            'description'=>'Eliminar cualquier dato de usuarios del sistema',
        ]);
        // categories
        Permission::create([
            'name'=>'Navegar categorías',
            'slug'=>'categories.index',
            'description'=>'lista y navega todos los categorías del sistema',
        ]);

        Permission::create([
            'name'=>'Ver detalle de categorías',
            'slug'=>'categories.show',
            'description'=>'ver en detalle cada categorías del sistema',
        ]);
        
        Permission::create([
            'name'=>'Creación de categorías',
            'slug'=>'categories.create',
            'description'=>'Podría crear nuevos categorías en el sistema',
        ]);
        Permission::create([
            'name'=>'Edicion de categorías',
            'slug'=>'categories.edit',
            'description'=>'Editar cualquier dato de categorías del sistema',
        ]);

        Permission::create([
            'name'=>'eliminar categorías',
            'slug'=>'categories.destroy',
            'description'=>'Eliminar cualquier dato de categorías del sistema',
        ]);
        // tags
        Permission::create([
            'name'=>'Navegar etiquetas',
            'slug'=>'tags.index',
            'description'=>'lista y navega todos los etiquetas del sistema',
        ]);

        Permission::create([
            'name'=>'Ver detalle de etiquetas',
            'slug'=>'tags.show',
            'description'=>'ver en detalle cada etiquetas del sistema',
        ]);
        
        Permission::create([
            'name'=>'Creación de etiquetas',
            'slug'=>'tags.create',
            'description'=>'Podría crear nuevos etiquetas en el sistema',
        ]);
        Permission::create([
            'name'=>'Edicion de etiquetas',
            'slug'=>'tags.edit',
            'description'=>'Editar cualquier dato de etiquetas del sistema',
        ]);

        Permission::create([
            'name'=>'eliminar etiquetas',
            'slug'=>'tags.destroy',
            'description'=>'Eliminar cualquier dato de etiquetas del sistema',
        ]);
        // portfolios
        Permission::create([
            'name'=>'Navegar portafolios',
            'slug'=>'portfolios.index',
            'description'=>'lista y navega todos los portafolios del sistema',
        ]);

        Permission::create([
            'name'=>'Ver detalle de portafolios',
            'slug'=>'portfolios.show',
            'description'=>'ver en detalle cada portafolios del sistema',
        ]);
        
        Permission::create([
            'name'=>'Creación de portafolios',
            'slug'=>'portfolios.create',
            'description'=>'Podría crear nuevos portafolios en el sistema',
        ]);
        Permission::create([
            'name'=>'Edicion de portafolios',
            'slug'=>'portfolios.edit',
            'description'=>'Editar cualquier dato de portafolios del sistema',
        ]);

        Permission::create([
            'name'=>'eliminar portafolios',
            'slug'=>'portfolios.destroy',
            'description'=>'Eliminar cualquier dato de portafolios del sistema',
        ]);
        // services
        Permission::create([
            'name'=>'Navegar servicios',
            'slug'=>'services.index',
            'description'=>'lista y navega todos los servicios del sistema',
        ]);

        Permission::create([
            'name'=>'Ver detalle de servicios',
            'slug'=>'services.show',
            'description'=>'ver en detalle cada servicios del sistema',
        ]);
        
        Permission::create([
            'name'=>'Creación de servicios',
            'slug'=>'services.create',
            'description'=>'Podría crear nuevos servicios en el sistema',
        ]);
        Permission::create([
            'name'=>'Edicion de servicios',
            'slug'=>'services.edit',
            'description'=>'Editar cualquier dato de servicios del sistema',
        ]);

        Permission::create([
            'name'=>'eliminar servicios',
            'slug'=>'services.destroy',
            'description'=>'Eliminar cualquier dato de servicios del sistema',
        ]);
        //roles 
        Permission::create([
            'name'=>'Navegar roles',
            'slug'=>'roles.index',
            'description'=>'lista y navega todos los rol del sistema',
        ]);

        Permission::create([
            'name'=>'Ver detalle de roles',
            'slug'=>'roles.show',
            'description'=>'ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'=>'Creacion de roles',
            'slug'=>'roles.create',
            'description'=>'Editar cualquier dato de rol del sistema',
        ]);

        Permission::create([
            'name'=>'Edicion de roles',
            'slug'=>'roles.edit',
            'description'=>'Editar cualquier dato de rol del sistema',
        ]);

        Permission::create([
            'name'=>'eliminar roles',
            'slug'=>'roles.destroy',
            'description'=>'Eliminar cualquier dato de rol del sistema',
        ]);
    }
}

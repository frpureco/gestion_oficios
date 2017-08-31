<div class="page-header">
    <div class="container">
        <div class="text-center">        
            <h2>Sistema de Gestión de Oficios de la ENES Unidad Morelia</h2>
        </div>
        <!-- si esta loguedo aparece el boton de cerrar sesion -->
        <?php if ($this->session->has_userdata('logueado')) {
            echo "<ul>
        <button class= \"btn btn-default\" id= \"cerrar\" > cerrar session</button>
        </ul>";
        }?>
    </div>
    
    
</div>
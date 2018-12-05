<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Acessos</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                    <a href="#">
                        <i class='fa fa-heartbeat'></i> <span>Consultas</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('agendamentos') }}"><i class="fa fa-circle-o"></i> LISTAGEM</a></li>
                        <li><a href="{{ url('agendamentos/create') }}"><i class="fa fa-circle-o"></i> AGENDAR</a></li>

                    </ul>
                </li>



               <li class="treeview">
                   <a href="#">
                       <i class='fa fa-list-ul'></i> <span>Listagem</span>
                           <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                           </span>
                   </a>
                   <ul class="treeview-menu">
                       <li><a href="{{ url('responsaveis') }}"><i class="fa fa-circle-o"></i> RESPONSAVEIS</a></li>
                       <li><a href="{{ url('pacientes') }}"><i class="fa fa-circle-o"></i> PACIENTES</a></li>
                       <li><a href="{{ url('medicos') }}"><i class="fa fa-circle-o"></i> MEDICOS</a></li>
                       <li><a href="{{ url('convenios') }}"><i class="fa fa-circle-o"></i> CONVENIOS</a></li>
                       <li><a href="{{ url('especializacaos') }}"><i class="fa fa-circle-o"></i> ESPECIALIZAÇÕES</a></li>


                   </ul>
               </li>

               <li class="treeview">
                    <a href="#">
                        <i class='fa fa-user'></i> <span>Cadastros</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('responsaveis/create') }}"><i class="fa fa-circle-o"></i> RESPONSAVEIS</a></li>
                        <li><a href="{{ url('pacientes/create') }}"><i class="fa fa-circle-o"></i> PACIENTES</a></li>
                        <li><a href="{{ url('medicos/createMaster') }}"><i class="fa fa-circle-o"></i> MEDICOS</a></li>
                        <li><a href="{{ url('convenios/create') }}"><i class="fa fa-circle-o"></i> CONVENIOS</a></li>
                        <li><a href="{{ url('especializacaos/create') }}"><i class="fa fa-circle-o"></i> ESPECIALIZAÇÕES</a></li>


                    </ul>
                </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

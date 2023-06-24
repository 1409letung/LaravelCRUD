<nav class="navbar navbar-expand-sm bg-warning">
    <div class="container-fluid">
     <ul class="navbar-nav">
         <li class="nav-item">
             <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
         </li>
         <li class="nav-item">
             <a href="about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
         </li>
         <li class="nav-item">
             <a href="porfolio" class="nav-link {{ request()->is('porfolio') ? 'active' : '' }}">Porfolio</a>
         </li>
         <li class="nav-item">
            <a href="contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </li>
     </ul>
    </div>
 </nav>
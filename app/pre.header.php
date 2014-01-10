<?
# Incluimos jQuery y LESS
Assets::LoadThird( Assets::JQUERY );
Assets::LoadThird( Assets::LESS );

# Fuentes necesarias
Assets::LoadFont('Open Sans', '300,400,800');
Assets::LoadFont('Ubuntu', '300,400,800');

# Estilos
Assets::LoadStyle('main.less', 'global');
Assets::LoadStyle('home.less');

# JavaScript
Assets::LoadLib('home.js');

# Incluimos la configuración para todas las aplicaciones.
include PATH('Kernel') . 'pre.header.php';
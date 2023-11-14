<div style="justify-content: space-evenly; display:flex; width: 100%" class="opciones">
    {{-- <a class="navbar navbar-expand-md navbar-light;"
        style="color: black; text-decoration: none; font-size: 16px" href="#">
        <img style="width: 35px" src="" alt="">
        Inicio
    </a> --}}
    <a class="navbar navbar-expand-md navbar-light;"
        style="color: black; text-decoration: none; font-size: 16px" href="#">
        <img style="width: 35px" src="https://cdn-icons-png.flaticon.com/128/2175/2175429.png" alt="">
        Servicios
    </a>
    <a class="navbar navbar-expand-md navbar-light;"
        style="color: black; text-decoration: none; font-size: 16px" href="#">
        <img style="width: 35px" src="https://cdn-icons-png.flaticon.com/128/8165/8165322.png" alt="">
        Informacion
    </a>
    <a class="navbar navbar-expand-md navbar-light;"
        style="color: black; text-decoration: none; font-size: 16px" href="#">
        <img style="width: 35px" src="https://cdn-icons-png.flaticon.com/128/2661/2661704.png" alt="">
        contactos
    </a>
    @Auth
    <a class="navbar navbar-expand-md navbar-light;"
        style="color: black; text-decoration: none; font-size: 16px" href="{{route('perfil')}}">
        <img style="width: 35px" src="https://cdn-icons-png.flaticon.com/128/8780/8780541.png" alt="">
        Perfil
    </a>
    @endAuth
</div>


<ul class="nav">
    @foreach($materias as $materia)
    <li class="nav-item">
      <a class="nav-link active" href="#">{{$materia->nombre}}</a>
    </li>
    @endforeach
  </ul>

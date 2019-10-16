@extends('principal')
@section('contenido')
<!-- Contenido Principal -->
<template v-if="menu==0">
<h1>Hola mundo menu 0</h1>
</template>
<template v-if="menu==1">

    <slider-component></slider-component>
</template>
<template v-if="menu==2">
        <user></user>
</template>
<template v-if="menu==3">
    <h1>Hola mundo menu 3</h1>
</template>
<template v-if="menu==4">
    <h1>Hola mundo menu 4</h1>
</template>
<template v-if="menu==5">
    <evento></evento>


</template>
<template v-if="menu==6">
    <h1>Hola mundo menu 6</h1>
</template>
<template v-if="menu==7">
<novedad></novedad>
</template>
<template v-if="menu==8">
    <h1>Hola mundo menu 8</h1>
</template>
<template v-if="menu==9">
    <h1>Hola mundo menu 9</h1>
</template>
<template v-if="menu==10">
    <h1>Hola mundo menu 10</h1>
</template>
<template v-if="menu==11">
    <h1>Hola mundo menu </h1>
</template>
<template v-if="menu==12">
    <h1>Hola mundo menu 12</h1>
</template>

@endsection

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">¿Por qué elegirnos?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Descubre las características que hacen de nuestro blog un lugar especial para compartir y descubrir
                contenido de calidad.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @include('cardNosotros', [
                'title' => 'Ideas Frescas',
                'description' => 'Contenido original y perspectivas únicas que te inspirarán y te harán reflexionar sobre diversos temas.',
            ])

            @include('cardNosotros', [
                'title' => 'Comunidad',
                'description' =>
                    'Únete a una comunidad de lectores y escritores apasionados que comparten intereses similares.',
            ])

            @include('cardNosotros', [
                'title' => 'Crecimiento',
                'description' =>
                    'Aprende algo nuevo cada día con contenido educativo y experiencias compartidas por expertos.',
            ])



        </div>
    </div>
</section>

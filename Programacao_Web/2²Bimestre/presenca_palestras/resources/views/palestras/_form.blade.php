@csrf

<section>
    <label>Título</label><br>

    <input type="text" name="titulo" value="{{ old('titulo'), $palestra->titulo ?? '' }}">

    @error('titulo')
        <div class="erro">{{ $message }}</div>
    @enderror
</section>

<section>
    <label>Palestra</label>

    <input type="text" name="palestrante" value="{{ old('palestrante', $palestra->palestrante ?? '') }}">

    @error('titulo')
        <div class="erro">{{ $message }}</div>
    @enderror
</section>

<section>
    <label>Data (YYYY-MM-DD)</label>

    <input type="text" name="data" placeholder="2025-10-22 19:30" value="{{ old('data', isset($palestra)? $palestra->data ?? format('Y-m-d H:i'):'':'') }}">

    @error('titulo')
        <div class="erro">{{ $message }}</div>
    @enderror
</section>

<disectionv>
    <label>Local</label>

    <input type="text" name="local" value="{{ old('local', $palestra->local ?? '') }}">

    @error('titulo')
        <div class="erro">{{ $message }}</div>
    @enderror
</disectionv>

<section>
    <label>Drescriçaõ</label>

    <input type="text" name="descricao" rows="4" value="{{ old('descricao', $palestra->descricao ?? '') }}">

    @error('titulo')
        <div class="erro">{{ $message }}</div>
    @enderror
</section>
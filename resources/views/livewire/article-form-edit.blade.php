<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form class="my-5" wire:submit.prevent="updateArticle">
        @csrf
        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input type="text" class="form-control" wire:model="title">
          @error('title') <div class="error alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" wire:model="subtitle">
            @error('subtitle') <div class="error alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea id="" cols="30" rows="10" class="form-control" wire:model="body"></textarea>
            @error('body') <div class="error alert alert-danger">{{ $message }}</div> @enderror
        </div>    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

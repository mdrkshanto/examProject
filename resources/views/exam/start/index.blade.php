<x-exam title="Exam - 1">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Exam - 1</h4>
        </div>
        <div class="card-body">
            <section class="row py-5 bg-color-2">
                <livewire:exam.coundown-timer/>
            </section>
            @foreach($questions as $key => $question)
                <section class="row py-5 bg-color-1">
                    <h2 class="col">
                        Question {{$key+1}}: {{$question->question}}
                    </h2>
                </section>
                <section class="row py-5 justify-content-center">
                    <h3 class="col-12">Answer: @error('answer') <span class="text-danger">{{$message}}</span> @enderror</h3>
                    <form action="{{route('exam.submit',['question' => $question->id])}}" method="post">
                        @csrf
                        <div class="card card-body mb-2">
                            <div class="row">
                                @foreach($question->questionOptions as $option)
                                    <div class="col-6">
                                        <input type="radio" name="answer" value="{{$option->id}}"/> {{$option->option}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button class="btn btn-sm shadow-none btn-primary col-3" type="submit">Submit</button>
                        </div>
                    </form>
                </section>
            @endforeach

        </div>
    </div>
</x-exam>
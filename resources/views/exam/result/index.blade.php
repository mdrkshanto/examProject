<x-exam title="Result">
    <div class="section page-banner-section bg-color-1">
        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Result</h2>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <section class="card">
        <div class="card-body">
            <h4 class="card-title">{{$examSubmits->first()->getExam->title}}</h4>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Your Answer</th>
                    <th>Correct Answer</th>
                    <th>Result</th>
                </tr>
                </thead>
                <tbody>
                @foreach($examSubmits as $examSubmit)
                    @php
                        $correctAns = $examSubmit->getQuestion->questionOptions()->where('is_correct',true)->first()->option;
                    $submitedAns = $examSubmit->getQuestionOption->is_correct;
                    @endphp
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$examSubmit->getQuestion->question}}</td>
                        <td>{{$examSubmit->getQuestionOption->option}}</td>
                        <td>{{$correctAns}}</td>
                        <td class="fw-bolder{{$submitedAns ? ' text-success' : ' text-danger'}}">{{$submitedAns ? 'Correct' : 'Incorrect'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-exam>
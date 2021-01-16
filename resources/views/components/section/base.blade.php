@props([
'top' => '',
'bottom' => ''
])
<div class="py-12">
    <div class="report-card">
        <div class="card">
            <div class="card-body flex flex-col">
                <div class="flex flex-row justify-left items-center">
                    {{$top}}
                </div>
                <div class="mt-8">
                    {{$bottom}}
                </div>
            </div>
        </div>
    </div>
</div>


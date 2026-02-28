<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Projetos</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-8 antialiased">
    <div class="max-w-6xl mx-auto mb-6 px-4 sm:px-0 mt-8">
        <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">
            Gestão de Projetos
        </h1>
        <p class="mt-1 text-sm text-gray-500">
            Gerencie orçamentos, acompanhe despesas e controle seus projetos.
        </p>
    </div>
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        
       <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Lista de Projetos</h1>
            
            <a href="{{ route('projects.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition-colors inline-block">
                + Novo Projeto
            </a>
        </div>
        @if($projects->isEmpty())
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-md">
                <p class="text-yellow-700">Não há projetos cadastrados.</p>
            </div>
        @else
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Nome</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Tipo</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Descrição</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Orçamento total</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Gasto atual</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Orçamento restante</th>
                            <th scope="col" colspan="2" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Custo ao cliente</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($projects as $project)
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $project->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded border border-gray-300">
                                        {{ $project->type }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">
                                    {{ $project->description ?? '-' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-green-600">
                                    R$ {{ number_format($project->total_budget, 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-red-600">
                                    R$ {{ number_format($projectService->getCurrentExpenseTotal($project), 2, ',', '.') }}
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-blue-600">
                                    R$ {{ number_format($projectService->getRemainingBudget($project), 2, ',', '.') }}
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-purple-600">
                                    R$ {{ number_format($projectService->getCostToCostumer($project), 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="/projetos/{{$project->id}}/gastos" 
                                    class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 hover:bg-indigo-100 hover:text-indigo-900 rounded-md transition-colors text-xs font-semibold border border-indigo-200">
                                        + Incluir Gasto
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
       <div class="max-w-6xl mx-auto mt-12 mb-6 border-t border-gray-200 pt-6 text-right px-6 sm:px-0">
            <p class="text-sm text-gray-500">
                Desenvolvido por 
                <a href="https://www.linkedin.com/in/luan-reis-de-carvalhotisrs/" class="font-semibold text-blue-600 hover:text-blue-800 hover:underline transition-colors duration-200">
                    Luan  Reis
                </a>
            </p>
        </div>
    </div>

    <div class="mt-6">
        {{ $projects->links() }}
    </div>

</body>
</html>
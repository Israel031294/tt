var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, 
    {
            type: 'line',
            data: 
            {
                labels:['0','1000','2000','3000','4000','5000','6000','7000','8000'],
                datasets: 
                [
                    {
                        label: 'Costo Total',
                        fill:{
                            target: 1,
                            above: 'rgb(174, 214, 241)',   
                            below: 'rgb(218, 247, 166)'    
                          },
                        data: [20000, 25000, 30000, 35000, 40000, 45000, 50000,55000,60000],
                        borderColor: ['rgb(9, 35, 228)'],
                        backgroundColor:['rgb(9, 35, 228)']
                        //tension:0.8
                        
                   },
                   {
                    label:'Ingresos por Ventas',
                    fill:false,
                    data:[0,15000,30000,45000,60000,75000,90000,105000,120000],
                    borderColor:['rgb(247, 55, 13)'],
                    //tension:1
                    borderWidth: 4,   
                    backgroundColor: ['rgb(247, 55, 13)']

                },
                   

               ]
            },/*,
            options: 
            {
                scales: 
                {
                    y: 
                    {
                        beginAtZero: true
                    }
                }
            }*/
            options: {
                responsive: true,
                plugins: {
                  legend: {
                    position: 'top',
                  },
                  title: {
                    display: true,
                    text: 'PUNTO DE EQUILIBRIO'
                  }
                }
              },
            
    }
);
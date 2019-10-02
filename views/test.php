 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="table-responsive">
                                       
        <h1>LISTES DES UTILISATEURS</h1>
<table class="table">
        <tr>
            <th> Matricule </th>
            <th> Nom </th>
            <th> Téléphone </th>
            <th>  Date Naissance</th>
            <th> Salaire </th>
            <th> Service </th>
            <th> Action  </th>
        </tr>
        <c:forEach items="${employes}" var="em">
         <tr>
                    <td> ${em.matricule}  </td>
                    <td> ${em.nom}  </td>
                    <td> ${em.telephone}  </td>
                    <td>  ${em.telephone} </td>
                    <td> ${em.salaire}    </td>
                    <td> ${em.serviceId.libelle}  </td>
                    <td> <a href="${pageContext.request.contextPath}/employe?action=edit&id=${em.id}">voici le lien</a></td>
                </tr>
        </c:forEach>
  </table>
</div>        
    
    </body>
    </html>
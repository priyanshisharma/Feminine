"""server URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from rest_framework import permissions
from drf_yasg.views import get_schema_view
from drf_yasg import openapi
from myapp.views import cervical_cancer, pcos

schema_view = get_schema_view(
   openapi.Info(
      title="Cervical Cancer Risk Prediction",
      default_version='v1',
      description="Swagger API UI for cervical cancer risk prediction API",
   ),
   public=True,
   permission_classes=(permissions.AllowAny,),
)
urlpatterns = [
    path('admin/', admin.site.urls),
    path('docs/',schema_view.with_ui('swagger',cache_timeout=0), name='schema-swagger-ui'),
    path('cervicalcancer/',cervical_cancer),
    path('pcos/',pcos)
]

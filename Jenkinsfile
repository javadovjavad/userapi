pipeline {
	
	agent {
	 	docker {
		    image 'zricethezav/gitleaks'
		    args '--entrypoint=""'
		}
	}
    stages {
        stage('Gitleaks') {
            
            steps {
              
               sh "git clone https://github.com/${repo}.git && cd userapi/ && gitleaks detect -v"
              
            }
        }
    }
}
